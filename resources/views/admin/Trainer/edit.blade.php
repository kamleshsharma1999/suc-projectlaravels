@extends('admin/comm');
@section('commman');


  <main id="main" class="main">

    <div class="pagetitle">
    
      <h1>Trainer add Form</h1>
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        <!-- @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">{{$message}}</div>
        @endif  -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Trainer Form Elements</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                  <input type="file" class="form-control" value="{{($editdata->image)}}" name="image">
                    @error('image')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{($editdata->name)}}" name="name">
                    @error('name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Position</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{($editdata->position)}}" name="position">
                    @error('position')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                  <textarea id="description " value="{{($editdata->description)}}" name="description" rows="4" cols="50"></textarea>
                    @error('description')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
</div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection

 