var postId = 0;               //einai gia to id gia na fenete sto edit    ,edit to post
var postBodyElement = null;      //gia na ginete amesws to update

$('.post').find('.action').find('.edit').on('click',function(event) {
  event.preventDefault();

postBodyElement = event.target.parentNode.parentNode.childNodes[1];
  var postBody = postBodyElement.textContent;
   postId = event.target.parentNode.parentNode.dataset['postid'];
 $('#post-body').val(postBody);
 $('#edit-modal').modal();

});

$('#modal-save').on('click',function() {
  $.ajax({
    method: 'POST',
    url: urlEdit,
    data: {body:$('#post-body').val(),postId: postId, _token: token}           //to kanoume gia to crsf
  })
  .done(function(msg) {
    $(postBodyElement).text(msg['new_body']);
    $('#edit-modal').modal('hide') ;                                    //an den ginei pass to validation ,gia na ginete amesws to update xwris reload
  });
});
