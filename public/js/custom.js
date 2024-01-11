function getAge(fromdate, todate) {
  if (todate) todate = new Date(todate);
  else todate = new Date();

  var age = [],
    fromdate = new Date(fromdate),
    y = [todate.getFullYear(), fromdate.getFullYear()],
    ydiff = y[0] - y[1],
    m = [todate.getMonth(), fromdate.getMonth()],
    mdiff = m[0] - m[1],
    d = [todate.getDate(), fromdate.getDate()],
    ddiff = d[0] - d[1];

  if (mdiff < 0 || (mdiff === 0 && ddiff < 0)) --ydiff;
  if (mdiff < 0) mdiff += 12;
  if (ddiff < 0) {
    fromdate.setMonth(m[1] + 1, 0);
    ddiff = fromdate.getDate() - d[1] + d[0];
    --mdiff;
  }
  if (ydiff > 0) age.push(ydiff + " year" + (ydiff > 1 ? "s " : " "));
  if (mdiff > 0) age.push(mdiff + " month" + (mdiff > 1 ? "s" : ""));
  if (ddiff > 0) age.push(ddiff + " day" + (ddiff > 1 ? "s" : ""));
  if (age.length > 1) age.splice(age.length - 1, 0, " and ");
  return age.join("");
}

$("#datepicker").datepicker({
  minDate: 0 // Setting minDate to 0 blocks past dates
});

function showRejectModal(itemId) {
  // Display the modal
  var modal = document.getElementById('rejectModal');
  modal.style.display = 'block';
}

function confirmReject(itemId) {
  var confirmation = confirm("Are you sure you want to reject this item?");
  
  if (confirmation) {
      // User clicked 'OK', proceed with rejection
      //submitForm(itemId, 'Rejected');
      showRejectModal(itemId);
  } else {
      // User clicked 'Cancel', do nothing
  }
}

function submitForm(id,type)
{
  var page = $(".submitBtn").attr('page');
  var note = $("#rejectReason").val();
  var flag = 0;
     $.ajax({
          type:'POST',
          url:"approved_reject_status",
          data:{'id':id,'type':type,'page':page,'note':note},
          beforeSend: function () {
              $('.submitBtn').attr("disabled","disabled");
          },
          success:function(msg)
          {
            if(msg==1)
            {
              window.location.reload();
            }
            else{
              $("#status_msg").html('Something Went Wrong');
            }
            
          }
    });
}


