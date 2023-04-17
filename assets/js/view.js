// $(document).ready(function(){
// $(".all").hide();
// });


const el = document.getElementById('student-select');

// const all = document.getElementsByClassName('all');
const east = document.getElementById('student');
const cer = document.getElementById('cer');
const ass = document.getElementById('ass');
const stu = document.getElementById('stu');


const des = document.getElementById('des-select');
const descrip = document.getElementById('descrip');
// const descrip = document.getElementById('country');

// const tertiary = document.getElementById('tertiary2');
// const specify = document.getElementById('specify');

des.addEventListener('change', function handleChange(event) {
  if (event.target.value == 'Yes') {
    descrip.style.display = 'block';
  }else{
    descrip.style.display = 'none';
  }


});

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
    stu.style.display = 'block';
  } else {
    east.style.display = 'none';
    stu.style.display = 'none';

  }


  if (event.target.value == 'Certificated') {
    // east.style.display = 'block';
    cer.style.display = 'block';
  } else {
    // east.style.display = 'none';
    cer.style.display = 'none';

  }

    if (event.target.value == 'Associate') {
    // east.style.display = 'block';
    ass.style.display = 'block';
  } else {
    // east.style.display = 'none';
    ass.style.display = 'none';

  }
  // if (event.target.value == 'other') {
  //   specify.style.display = 'block';
  // } else {
  //   specify.style.display = 'none';
  // }
});



