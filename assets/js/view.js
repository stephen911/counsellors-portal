// $(document).ready(function(){
// $(".all").hide();
// });


const el = document.getElementById('student-select');

// const all = document.getElementsByClassName('all');
const east = document.getElementById('student');

// const tertiary = document.getElementById('tertiary2');
// const specify = document.getElementById('specify');

el.addEventListener('change', function handleChange(event) {
  // if (event.target.value == 'none') {
  //   all.style.display = 'none';
  // } else {
  //   all.style.display = 'block';
  // }
//   if (event.target.value == 'adenta') {
//     shs.style.display = 'block';
//   } else {
//     shs.style.display = 'none';
//   }
  if (event.target.value == 'Student') {
    east.style.display = 'block';
  } else {
    east.style.display = 'none';
  }
  // if (event.target.value == 'other') {
  //   specify.style.display = 'block';
  // } else {
  //   specify.style.display = 'none';
  // }
});



