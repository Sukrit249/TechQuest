function EnableDisable(txt) {
    var input = document.getElementsByTagName("input");
    var title = input.title.value;
    var author = input.author.value;
    var check = quizzes.includes(title);
    //Reference the Button.
  
    //console.log(quizzes);
    //console.log(check);
  
    if(!check && title != "" && author != "") {
      document.getElementById("create_quiz").disabled = false;
    } else {
      document.getElementById("create_quiz").disabled = true;
      
    }

  //console.log(txt.parentElement.nextSibling.nextSibling.disabled = false);
};

function nextStep(btn){
  btn.style.display = "none";
  document.getElementById("title").disabled = true;
  document.getElementById("author").disabled = true;
  document.getElementById("step2").style.display = "block";
  document.getElementById("save_quiz").style.display = "block";
  document.getElementById("addQuestion").style.display = "block";
};

function checkQuestions() {
  var inputs = document.getElementsByTagName("input");
  //console.log(inputs);
  
  var check = true;
  var index = 0;
  while (index < inputs.length) {
    if(inputs[index].value == "") {
      check = false;
    }
    index++;
  }

  if(check) {
    document.getElementById("save_quiz").disabled = false;
  } else {
    document.getElementById("save_quiz").disabled = true;
  }

};

function addQuestion() {
  console.log("new Question");
  document.getElementById
};