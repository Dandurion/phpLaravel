<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
   public function index() {
    $customers = Customer::all();
   return view('customers/index')->with('customers', $customers);
  }
  public function create() {
   return view('customers/create');
}
  public function search(){
	  $search_text=$_GET['query'];
	  $results = Customer::where('name' , 'LIKE', '%' .$search_text. '%')->get();
	  return view('customers/search', compact('results'));
  }
  public function show($id) {
  //$customer = Customer::find($id);
    // Kokeile myös usein parempaa
    $customer = Customer::findOrFail($id);
  return view('customers/show')->with('customer', $customer);
}
 public function store() {

    $customer = new Customer();

    $customer->name = request('name');
    $customer->birth_date = request('birth_date');

    $customer->save();

    /*
    Customer::create([
      'name' => request('name'),
      'birth_date' => request('birth_date')
    ]);
    */

    return redirect('/customers');
}
public function edit($id) {
   $customer = Customer::find($id);
   return view('customers/edit')->with('customer', $customer);
}
public function update($id) {

    $customer = Customer::find($id);

    $customer->name = request('name');
    $customer->birth_date = request('birth_date');

    $customer->save();

    return redirect('/customers');
}
public function destroy($id) {
    Customer::find($id)->delete();
    return redirect('/customers');
}


}
