<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'thumbnail' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ]);
        $data['slug'] = Str::slug($data['title']);
        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'thumbnail' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ]);
        if ($data['title'] !== $news->title) {
            $data['slug'] = Str::slug($data['title']);
        }
        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}
