


  $("#form_contact").submit(function(e) {
      e.preventDefault();
      let timerInterval
        Swal.fire({
          title: 'Đang xử lí ...',
          timer: 6000,
          timerProgressBar: true,
          showConfirmButton:false,
          willOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
              const content = Swal.getContent()
              if (content) {
                const b = content.querySelector('b')
                if (b) {
                  b.textContent = Swal.getTimerLeft()
                }
              }
            }, 100)
          },
          onClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
          }
        })
      var form = $(this);
      var url = form.attr('action');
      $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          beforeSend: function () {
            $('#biof-loading').fadeOut();
          },

         
      }).done(function(response) {
        
        if (response.kq === 'success') {
           setTimeout(function(){
            Swal.fire({
              icon: 'success',
              title: "Đã gửi", 
              text: 'Chúng tôi sẽ phản hồi bạn trong thời gian sớm nhất !',
              confirmButtonText: "Đồng ý", 
              showConfirmButton: false,
              timer:3500,
            });
        
        },2000);
            
           
        } else {
            setTimeout(function(){
              Swal.fire({
                icon: 'error',
                title: "Lỗi", 
                text: 'Vui lòng kiểm tra lại thông tin  !',
                confirmButtonText: "Đồng ý", 
                showConfirmButton: false,
                timer:3500,
              }
              );
            },1500);
        }
      })
  });

