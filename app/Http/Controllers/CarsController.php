<?php
namespace App\Http\Controllers;

use datatables;

use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CarsController extends Controller
{

    public function index(Request $request)
    {

        return view('admin.cars');
    }

    public function store(Request $request)
    {
        // do validation
        Cars::create($request->all());
        return ['success' => true, 'message' => 'Inserted Successfully'];
    }

    public function show($id)
    {
        return;
    }

    public function update($id)
    {
        // do validation
        Cars::find($id)->update(request()->all());
        return ['success' => true, 'message' => 'Updated Successfully'];
    }

    public function destroy($id)
    {
        Cars::find($id)->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
    }
}
