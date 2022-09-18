@inject('request', 'Illuminate\Http\Request')
@extends('index')
@section('content')

<div class="card">
            <div class="card-header">
                <h3 class="page-title d-inline">All compaigns</h3>
                
                    <div  style="float: right;">
                            <a href="{{ route('compaign.create')}}" class="btn btn-success">
                           Add</a>
        
                    </div>
               
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">


                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>

                                        <th>Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Total</th>
                                        <th>Daily budgit</th>
                                        <th>Images</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($compaign as $key => $compaigns)
                                    @php
                                        $key += 1;
                                    @endphp
                                    <tr>
                                        <td>
                                            {{ $key }}
                                        </td>

                                        <td>
                                           
                                            {{ $compaigns->name}}
                                           
                                        </td>
                                        <td>
                                           
                                           {{ $compaigns->from}}
                                          
                                       </td>
                                       <td>
                                           
                                           {{ $compaigns->to}}
                                          
                                       </td> 
                                       <td>
                                           
                                           {{ $compaigns->total}}
                                          
                                       </td> 
                                        <td>
                                           
                                           {{ $compaigns->daily_budget}}
                                          
                                       </td>
                                       <td>
                                          <!-- <a href="{{ route('show_images', ['compaign_id' => $compaigns->id]) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a> -->
                                          
                                          <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-eye"></i></button>
                                          
                                        <!-- Modal -->
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{ $compaigns->name}} images</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                @foreach ($compaigns->image as  $key=>$imge)
                                                            @php
                                                                $key += 1;
                                                            @endphp
                                                        <div class="col-3">
                                                            <img src="{{asset('content_images/'.$imge->name)}}"  alt=""height="100px" width="100px">
                                                        </div>
                                                        @endforeach
                                                        </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                </div>

                                                </div>
                                            </div>
                                       </td>
                                       <td>
                                         <a href="{{ route('edit', ['compaign_id' => $compaigns->id]) }}" class="btn btn-info">update</a>

                                       </td>

                                   </tr>
                                @endforeach
                                </tbody>
                            </table>





                         </div>
                  </div>
             </div>
         </div>
     </div>
     @endsection