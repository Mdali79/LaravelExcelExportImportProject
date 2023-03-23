@extends('layout')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 mt-5">
            <div class="p-5 border-2 border border-secondary rounded">


             <h2>User Data:</h2>
             <form class="form" method="POST" enctype="multipart/form-data" action="{{route('import-product')}}">

              @csrf
               <label >Select File</label>
               <input type="file" name="file" class="form-control">
               <div class="mt-5">

                 <button type="submit" class="btn btn-info">submit to import</button>
                 <a href="{{route('export-product')}}" class="btn btn-primary float-right" >Export Excel</a>
               </div>

             </form>
             
            

            </div>
           


        </div>



    </div>






 </div>
@endsection
