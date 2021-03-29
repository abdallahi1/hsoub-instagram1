@extends('layouts.app')
@section('content')
<div class="album py-5 bg-light">
    <div class="container"> 
      <div class="row" style="direction:  rtl;text-align:  right;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h4 class="mb-3 center">المعلومات الشخصية</h4>
          <div class="row">
            <div class="col-md-3 mb-3">
              <img src="{{asset('images/avatar/'.$user->avatar)}}" style="width: 100%;height: 140px;">
            </div>  
            <div class="col-md-6 mb-6">
                <h2 id="name">{{$user->fitst_name}} {{$user->last_name}}</h2>
                <h3 id="birth_date">{{$user->birth_date}}</h3>
                <button class="btn btn-sm btn-outline-secondary" type="button" style="width:  60%;"><i class="fa fa-bullhorn"></i> | قام بنشر  {{$posts_counts}}<!-- Post Count --> منشور!</button> 
                <br>
                <button class="btn btn-sm btn-outline-secondary" type="button" style="width:  60%;"><i class="fa fa-heart"></i> | حصد {{$likes_counts}}<!-- Like Count --> إعجاب</button> 
            </div>
            <div class="col-md-3 mb-3">
              <!-- IF Start -->
              @if(isset($is_follower[0]) && $is_follower[0]->accepted==1)
              <!-- عرض الصفحة الشخصية للمستخدم إذا كان من المتابعين-->
                <button class="btn btn-sm btn-outline-info" type="button" style="width:  100%;" onclick="location.href='{{url('user/'.$user->id.'/posts')}}';"><i class="fa fa-eye"></i> عرض الصفحة الشخصية</button>
              @elseif(isset($is_follower[0]) && $is_follower[0]->accepted==0)
                <!-- إذا كان المستخدم أرسل طلب ولم يتم قبوله بعد-->
                <button class="btn btn-sm btn-outline-warning" type="button" style="width:  100%;"><i class="fa fa-paper-plane"></i>تم ارسال الطلب من قبل</button>
              @else
                <!-- إرسال الطلب في حال لم يكن المستخدم من الاصدقاء-->
                <form method="POST" action="{{url('follow')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <button class="btn btn-sm btn-outline-success" style="width:  100%;"><i class="fa fa-paper-plane"></i> إرسال طلب متابعة</button>
                </form> 
                @endif 
              <!-- IF End -->  
            </div>
          </div>
          <div class="row">
             <!-- عرض 3 من منشورات المستخدم -->
             <!-- Foreach -->
             @foreach($posts as $post)
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="{{asset('images/' .$post['image_path'])}}" alt="Card image cap" style="height: 166px">
                  <div class="card-body" style="height:  100px;">
                    <p class="card-text" style="text-align: right;direction:  rtl;">{{Str::limit($post['body'], 30)}}</p>
                    <br>
                  </div>
                  <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">{{$post['created_at']}}</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- End Foreach -->
          </div>
        </div>
      </div>
    </div>  
  </div>
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
        <script>
          $('#datepicker').datepicker({
              uiLibrary: 'bootstrap4',
              format: 'yyyy-mm-dd'
          });
      </script>
      <script>window.jQuery || document.write('<script src="{{ asset('assets/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
      <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
      <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/vendor/holder.min.js') }}"></script>
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
  
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
  
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
      </script>
      @endsection