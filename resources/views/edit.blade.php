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

    <div class="card" id="editUser">
            <div class="card-header">
                <h3 class="page-title d-inline">Edit <mark>{{$compaigns->name}}</mark>compaign</h3>
                <div  style="float: right;">
                    <a href="{{ route('compaign.index') }}"
                    class="btn btn-info" ><i class="fa fa-arrow-right"></i></a>
               </div>
  
               
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                    
                       <form method="post" action="{{route('update',['compaign_id' => $compaigns->id])}}" files="true" enctype="multipart/form-data">  
                              {{ csrf_field() }}
                              <div class="col-12 col-lg-12 form-group">
                                 <label for="name"class="control-label">Compaign Name</label>
                                 <input type="text" id="name" name="name"class="form-control" value="{{$compaigns->name}}">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="from"class="control-label">From Date</label>
                                 <input type="date" id="from"name="from" class="form-control"value="{{$compaigns->from}}">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="to"class="control-label">To Date</label>
                                 <input type="date" id="to"name="to" class="form-control"value="{{$compaigns->to}}">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="total"class="control-label">Total</label>
                                 <input type="float" id="total"name="total" class="form-control"value="{{$compaigns->total}}">
                            </div>
                            <div class="col-12 col-lg-12 form-group">
                                 <label for="daily_budget"class="control-label">Daily budget</label>
                                 <input type="float" id="daily_budget"name="daily_budget" class="form-control"value="{{$compaigns->daily_budget}}">
                            </div>
                            <div class="col-12 form-group">
                                   <label for="my_file"class="control-label">compaign images</label>
                                       <div class="row">
                                            
                                            @foreach ($compaigns->image as  $key=>$imge)
                                            @php
                                                $key += 1;
                                            @endphp
                                                <div class="col-3" >
                                                    <img src="{{asset('content_images/'.$imge->name)}}" height="100px" width="100px">
                                                    <button type="button" class="btn btn-danger " data-id="{{ $imge->id }}" id="delete_image">delete</button>
                                                         
                                                </div>
                                            @endforeach
                                            
                                        </div>
                                   <input type="file" class="form-control" name="image[]" multiple>
                            </div>
                            <br>
                            <div class="col-12 form-group">
                                <button id="submit" type="submit" class="btn btn-success form-group" style="float:right"> <i class='fa fa-save'></i></button>
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
            $(document).on('click', '#delete_image', function (e) {
                    
                    
                var id = $(this).data("id");
                document.getElementById("spiner").style.visibility = "visible";

                    // console.log(id);
                    $.ajax({
                        type: "POST",
                        url: "delete_image/"+id,
                        data: {
                            _token:'{{ csrf_token() }}',
                            
                                id:id,
                        },
                        success: function (){
                                // console.log("it Works");
                                $("#editUser").load("#editUser");
                                document.getElementById("spiner").style.visibility = "hidden";
                                

                            }
                    })
                });
            </script>
        @endpush
@endsection