@extends('layouts.master')
@section('title')
Real Estate
@endsection
@section('content')

<div class="container-fluid">
  <div class="row">
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

      <div class="clinic-s">
        <div class="row py-4 container-fluid ">
          <div class="col-md-12">
            <div class="page-heading">Leads</div>
          </div>
        </div>
      </div>
      <div class="page-header row py-4 justify-content-center">
        <div class="col-md-9" style=" margin: 70px">

          <div class="card card-small clinic-card">
            <div class="card-header border-bottom">
              Leads
            </div>
            <div class="card-body">
              <form method="post" action="{{route('leads.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label class="mb-2 formlabel">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Assign Lead</label>
                    <select class="form-control" name="client_id" id="client_id">
                      <option value="">Select Client</option>
                      @foreach($clients as $client)
                      <option value="{{$client->id}}">{{$client->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Market Location</label>
                    <input type="text" class="form-control" id="markete_location" name="markete_location" placeholder="Market Location" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Ask Price</label>
                    <input type="number" class="form-control" id="ask_price" name="ask_price" placeholder="Ask Price" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Price Per Door</label>
                    <input type="number" class="form-control" id="price_per_door" name="price_per_door" placeholder="Price per door" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Gross Revenue</label>
                    <input type="number" class="form-control" id="gross_revenue" name="gross_revenue" placeholder="Gross Revenue" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">NOI</label>
                    <input type="text" class="form-control" id="noi" name="noi" placeholder="NOI" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Cap Rate</label>
                    <input type="number" class="form-control" id="cap_rate" name="cap_rate" placeholder="Cap Rate" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Occupancy</label>
                    <input type="text" class="form-control" id="occupancy" name="occupancy" placeholder="Occupancy" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Asset Class</label>
                    <input type="text" class="form-control" id="asset_class" name="asset_class" placeholder="Asset Class" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Pro Forma If Applicable</label>
                    <input type="text" class="form-control" id="pro_forma" name="pro_forma" placeholder="Pro Forma If Applicable" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Renovations</label>
                    <input type="text" class="form-control" id="renovations" name="renovations" placeholder="Renovations" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Broker and Contact</label>
                    <input type="text" class="form-control" id="broker_contact" name="broker_contact" placeholder="Broker and Contact" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="mb-2 formlabel">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Status" required>
                  </div>
                  <div class=" col-md-12">
                    <label class="mb-2 formlabel">Other documents:</label>
                  </div>

                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">OM</label>
                    <input type="file" class="pt-2" id="om_file" name="om_file">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">Rent Roll</label>
                    <input type="file" class="pt-2" id="image" name="rent_roll_file">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">P and L</label>
                    <input type="file" class="pt-2" id="image" name="p_l_file">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">T12</label>
                    <input type="file" class="pt-2" id="image" name="t12_file">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">T3</label>
                    <input type="file" class="pt-2" id="image" name="t3_file">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">Collections report due to Covid</label>
                    <input type="file" class="pt-2" id="image" name="covid_file">
                  </div>
                  <div class="col-md-4 mt-4">
                    <label class="mb-1 formlabel">CapX Report</label>
                    <input type="file" class="pt-2" id="image" name="capx_file">
                  </div>
                  <!-- <div class="col-md-4">
                    <label class="mb-2 formlabel">OM</label>
                    <input type="file" class="pt-2" id="image" name="image" required>
                  </div> -->
                </div>
                <button type="submit" class=" mt-5 btn btn-primary btn-add float-right">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

@endsection