<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function edit($id)
    {
        $company = CompanyProfile::findOrFail($id);

        return view('admin.company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = CompanyProfile::findOrFail($id);
        $data = $request->validate([
            'company_name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
        ]);
        $company->update($data);

        return redirect()->route('admin.company.edit', $id)->with('success', 'Company profile updated successfully.');
    }
}
