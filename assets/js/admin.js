$('#image-need-preview').change(function(){      
  let reader = new FileReader();
  reader.onload = (e) => { 
    $('#image-preview-container').attr('src', e.target.result); 
  }
  reader.readAsDataURL(this.files[0]); 
});

// document.getElementsById( "image-need-preview" ).change = function() {
//   let reader = new FileReader();
//   reader.onload = (e) => { 
//     $('#image-preview-container').attr('src', e.target.result); 
//   }
// }