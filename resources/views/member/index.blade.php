<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Laravel axios crud</title>
  </head>
  <body>
    
    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <h2>Laravel 8 ajax crud
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" style="float: right;">
              Add Member
            </button>
          </h2>

          <div class="alert alert-success" style="display: none;"></div>

          <table class="table table-bordered">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Action</th>
               </tr>
             </thead>

             <tbody> 
              @foreach($members as $member)
               <tr>
                 <td>{{ $member->id }}</td>
                 <td>{{ $member->name }}</td>
                 <td>{{ $member->phone }}</td>
                 
                 <td>
                   <button class="btn btn-success editBtn" data-id="{{$member->id}}">Edit</button>
                   <button class="btn btn-danger deletetBtn" data-id="{{$member->id}}">Delete</button>
                 </td>
               </tr>
               @endforeach
             </tbody>
          </table>
        </div>
      </div>
    </div>
    








    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    @include('member.add_modal')
    @include('member.update_modal')
    @include('member.member_js')
  </body>
</html>