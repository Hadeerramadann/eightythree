@inject('request', 'Illuminate\Http\Request')

@extends('index')
@section('content')

<div wire:loading id="spiner" style="visibility: hidden;">
     <div style="display:flex; display: flex;
          justify-content: center;
          align-items: center;
          background-color: black;
          position: fixed;
          top: 0px;
          left: 0px;
          z-index: 9999;
          opacity: .75;
          height: 100%;
          width: 100%;">
          <div class="la-ball-spin la-2x">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          </div>
     </div>
</div>      

    <div class="card">
            <div class="card-header">
                <h3 class="page-title d-inline">Add  new compaign</h3>
                <div  style="float: right;">
                    <a href="{{  url()->previous() }}"
                    class="btn btn-info" ><i class="fa fa-arrow-right"></i></a>
               </div>
   
               
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                    
                       <form method="post" action="{{route('compaign.store')}}" files="true" enctype="multipart/form-data">  
                              {{ csrf_field() }}
                              <div class="col-12 col-lg-12 form-group">
                                 <label for="name"class="control-label">Compaign Name</label>
                                 <input type="text" id="name" name="name"class="form-control">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="from"class="control-label">From Date</label>
                                 <input type="date" id="from"name="from" class="form-control">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="to"class="control-label">To Date</label>
                                 <input type="date" id="to"name="to" class="form-control">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="total"class="control-label">Total</label>
                                 <input type="float" id="total"name="total" class="form-control">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="daily_budget"class="control-label">Daily budget</label>
                                 <input type="float" id="daily_budget"name="daily_budget" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                   <label for="my_file"class="control-label">compaign images</label>
                                   <input type="file" class="form-control" name="image[]" multiple>
                            </div>
                            <br>
                            <div class="col-12 form-group">
                                <button id="submit" type="submit" class="btn btn-success form-group" style="float:right"> <i class='fa fa-save'></i>
                              
                                <!-- <svg class="spinner" viewBox="0 0 50 50">
                                   <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                                   </svg> -->
                              </button>
                            </div>
                            

                        </form>
                        
                  </div>
             </div>
         </div>
     </div>
     @push('after-scripts')
       
        <script>
               $(document).on('click', '#submit', function (e) {
                              
                              
                         
                              document.getElementById("spiner").style.visibility = "visible";
                              });  
          </script>
        @endpush
@endsection