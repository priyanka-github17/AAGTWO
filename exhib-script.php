<div class="modal fade" id="messageBox" tabindex="-1" role="dialog" aria-labelledby="msgTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="msgtLongTitle">Request Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content scroll">
          <div id="updateMsg"></div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  $(function() {
    $('.resdl').on('click', function() {

      var res_id = $(this).data('docid');
      $.ajax({
        url: 'control/exhib.php',
        data: {
          action: 'updateFileDLCount',
          resId: res_id,
          userId: '<?= $userid ?>'
        },
        type: 'post',
        success: function() {
          //console.log(data);
        }
      });

    });

    $('.vidview').on('click', function() {
      var vid_id = $(this).data('vidid');
      $.ajax({
        url: 'control/exhib.php',
        data: {
          action: 'updateVideoView',
          vidId: vid_id,
          userId: '<?= $userid ?>'
        },
        type: 'post',
        success: function(response) {
          //console.log(response);
        }
      });

    });

    $('#subSampleReq').on('click', function() {
      var exh_id = $(this).data('exhid');
      var user_id = $(this).data('userid');
      $.ajax({
        url: 'control/exhib.php',
        data: {
          action: 'samplereq',
          exhId: exh_id,
          userId: user_id
        },
        type: 'post',
        success: function(message) {
          console.log(message);
          var response = JSON.parse(message);
          var status = response['status'];
          var msg = response['message'];
          if (status == 'success') {
            $('#updateMsg').text('Request for Samples have been received.')
            $('#messageBox').modal('show');
          } else {
            $('#updateMsg').text('Request for Samples could not be submitted. Please try again.')
            $('#messageBox').modal('show');
          }
        }
      });
    });
    $('#subProdDet').on('click', function() {
      var exh_id = $(this).data('exhid');
      var user_id = $(this).data('userid');
      $.ajax({
        url: 'control/exhib.php',
        data: {
          action: 'prodreq',
          exhId: exh_id,
          userId: user_id
        },
        type: 'post',
        success: function(message) {
          console.log(message);
          var response = JSON.parse(message);
          var status = response['status'];
          var msg = response['message'];
          if (status == 'success') {
            $('#updateMsg').text('Request for in-clinic/telephonic product detailing have been received.')
            $('#messageBox').modal('show');
          } else {
            $('#updateMsg').text('Request for in-clinic/telephonic product detailing could not be submitted. Please try again.')
            $('#messageBox').modal('show');
          }
        }
      });
    });

    $('#subCampReq').on('click', function() {
      var exh_id = $(this).data('exhid');
      var user_id = $(this).data('userid');
      $.ajax({
        url: 'control/exhib.php',
        data: {
          action: 'campreq',
          exhId: exh_id,
          userId: user_id
        },
        type: 'post',
        success: function(message) {
          console.log(message);
          var response = JSON.parse(message);
          var status = response['status'];
          var msg = response['message'];
          if (status == 'success') {
            $('#updateMsg').text('Request for conducting Camp has been received.')
            $('#messageBox').modal('show');
          } else {
            $('#updateMsg').text('Request for conducting Camp could not be submitted. Please try again.')
            $('#messageBox').modal('show');
          }
        }
      });
    });
  });
</script>