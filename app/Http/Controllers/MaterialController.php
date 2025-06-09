<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Models\Material;
use App\Models\MaterialProduct;
use App\Models\MaterialType;
use App\Models\Unit;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(){

        $materials = Material::all();
        $sumMaterialProducts = [];
        foreach ($materials as $material) {
            $sumMaterialProducts[$material->id] = MaterialProduct::where('material_id', $material->id)->sum('quantity');
        }

        return view('materials.index', compact('materials','sumMaterialProducts'));
    }

    public function create()
    {
        $units = Unit::all();
        $materialTypes = MaterialType::all();
        return view('materials.create', compact('units', 'materialTypes'));
    }
    public function store(MaterialRequest $request)
    {
        Material::create($request->validated());
        return redirect()->route('materials.index')->with('success', 'Материал успешно добавлен');
    }


    public function edit(material $material)
    {
        $units = Unit::all();
        $materialTypes = MaterialType::all();
        return view('materials.edit',compact('material', 'units', 'materialTypes'));
    }
    public function update(MaterialRequest $request, material $material){
        $material->update($request->validated());
        return redirect()->route('materials.index');
    }


    public function show(Material $material)
    {
        $products = $material->productMaterials()
            ->with('product')
            ->get();

        return view('materials.list', compact('material', 'products'));
    }

}
