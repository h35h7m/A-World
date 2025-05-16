@php
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp
<!doctype html>
<html lang="en">
 

@include('admin.partials.head')
 
  <body class="vertical  light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif  ">
    <div class="wrapper">

        @include('admin.partials.navbar')


        @include('admin.partials.sidebar')
     
       
      <main role="main" class="main-content">
        @yield('content')
        
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group list-group-flush my-n3">
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-box fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Package has uploaded successfull</strong></small>
                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-download fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Widgets are updated successfull</strong></small>
                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-inbox fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Notifications have been sent</strong></small>
                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-link fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Link was attached to menu</strong></small>
                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                  </div>
                </div>
              </div> <!-- / .row -->
            </div> <!-- / .list-group -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
          </div>
        </div>
      </div>
    </div>

    @include('admin.partials.scripts')

    <script>
      function confirmDelete(id){
        if(confirm('Are You Sure You Want To Delete This Record?'))
          document.getElementById('deleteForm-'+ id).submit();
        
      }
    </script>

    <!-- في نهاية ملف blade -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  // اختار زر فتح المودال - لازم تعرف إزاي بتفتح المودال عند الضغط على الجرس
  // مثلاً لو عندك زر بالشكل دا:
  // <a href="#" data-toggle="modal" data-target=".modal-notif">Notifications</a>

  const notifTrigger = document.querySelector('[data-target=".modal-notif"]');

  if (notifTrigger) {
    notifTrigger.addEventListener('click', function () {
      fetch('/notifications')
        .then(res => res.json())
        .then(data => {
          const notifList = document.querySelector(".modal-notif .modal-body .list-group");
          notifList.innerHTML = "";  // تفريغ القائمة

          data.notifications.forEach(n => {
            notifList.innerHTML += `
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-user fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>${n.message}</strong></small>
                    <div class="my-0 text-muted small">${n.name}</div>
                    <small class="badge badge-pill badge-light text-muted">${n.time}</small>
                  </div>
                </div>
              </div>
            `;
          });

          // لو عندك نقطة (dot) للإشعارات الجديدة
          const dot = document.querySelector(".dot");
          if (dot) {
            dot.style.display = data.has_unseen ? "inline-block" : "none";
          }
        });
    });
  }
});

  </script>
  
    
  </body>
</html>