        (function ($ , Views, Models, AE) {
          $(document).ready(function(){
              var currentUser;
              if($('#user_id').length > 0 ) {
                  currentUser = new Models.User( JSON.parse($('#user_id').html()) );
                  //currentUser.fetch();
              } else {
                  currentUser = new Models.User();
              }
              // init view front
              if(typeof Views.Front !== 'undefined') {
                  AE.App = new Views.Front({model : currentUser});
              }
              AE.App.user = currentUser;
              if(typeof Views.PostSevice !== 'undefined' && $('.mjob-post-service').length > 0) {
                  AE.PostService = new Views.PostSevice({
                      el: '.mjob-post-service',
                      user_login: currentUser.get('id'),
                      free_plan_used: 0,
                      limit_free_plan: false,
                      step: 2
                  });
              }
            });
        })(jQuery, AE.Views, AE.Models, window.AE);