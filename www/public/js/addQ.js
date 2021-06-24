function EnableDisable(txt) {
    var input = document.getElementsByTagName("input");
    var title = input.title.value.toLowerCase();
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

var i = 4;
function addQuestion() {
  console.log("new Question");
  
  var newQ = document.createElement("div");
  newQ.className = "question";

  var labelQuestion = document.createElement("label");
  labelQuestion.setAttribute("for", "q" + i);
  labelQuestion.innerHTML = "Enter Question:";
  var inputQuestion = document.createElement("input");
  inputQuestion.setAttribute("onkeyup", "checkQuestions()");
  inputQuestion.setAttribute("type", "text");
  inputQuestion.setAttribute("name", "q" + i);
  inputQuestion.setAttribute("id", "q" + i);

  var labelCorrectAnswer = document.createElement("label");
  labelCorrectAnswer.setAttribute("for", "q" + i);
  labelCorrectAnswer.innerHTML = "Enter correct answer:";
  var inputCorrectAnswer = document.createElement("input");
  inputCorrectAnswer.setAttribute("onkeyup", "checkQuestions()");
  inputCorrectAnswer.setAttribute("type", "text");
  inputCorrectAnswer.setAttribute("name", "aq" + i + "_" + 1);
  inputCorrectAnswer.setAttribute("id", "aq" + i + "_" + 1);

  var labelFalseAnswer1 = document.createElement("label");
  labelFalseAnswer1.setAttribute("for", "q" + i);
  labelFalseAnswer1.innerHTML = "Enter a wrong answer:";
  var inputFalseAnswer1 = document.createElement("input");
  inputFalseAnswer1.setAttribute("onkeyup", "checkQuestions()");
  inputFalseAnswer1.setAttribute("type", "text");
  inputFalseAnswer1.setAttribute("name", "aq" + i + "_" + 2);
  inputFalseAnswer1.setAttribute("id", "aq" + i + "_" + 2);

  var labelFalseAnswer2 = document.createElement("label");
  labelFalseAnswer2.setAttribute("for", "q" + i);
  labelFalseAnswer2.innerHTML = "Enter a wrong answer:";
  var inputFalseAnswer2 = document.createElement("input");
  inputFalseAnswer2.setAttribute("onkeyup", "checkQuestions()");
  inputFalseAnswer2.setAttribute("type", "text");
  inputFalseAnswer2.setAttribute("name", "aq" + i + "_" + 3);
  inputFalseAnswer2.setAttribute("id", "aq" + i + "_" + 3);

  var hr = document.createElement("hr");

  var div1 = document.createElement("div");
  var div2 = document.createElement("div");
  var div3 = document.createElement("div");
  var div4 = document.createElement("div");
  var div5 = document.createElement("div");
  var div6 = document.createElement("div");
  var div7 = document.createElement("div");
  var div8 = document.createElement("div");
  
  div1.appendChild(labelQuestion);
  div2.appendChild(inputQuestion);
  div3.appendChild(labelCorrectAnswer);
  div4.appendChild(inputCorrectAnswer);
  div5.appendChild(labelFalseAnswer1);
  div6.appendChild(inputFalseAnswer1);
  div7.appendChild(labelFalseAnswer2);
  div8.appendChild(inputFalseAnswer2);
  
  newQ.appendChild(div1);
  newQ.appendChild(div2);
  newQ.appendChild(div3);
  newQ.appendChild(div4);
  newQ.appendChild(div5);
  newQ.appendChild(div6);
  newQ.appendChild(div7);
  newQ.appendChild(div8);


  if (i <= 10) {
    document.getElementById("qs").append(hr);
    document.getElementById("qs").append(newQ);
    
    i++;
  } else {
    document.getElementById("addQuestion").style.display = "none";
  }
  checkQuestions();
};

function submitButtonClick(event) {
  event.preventDefault();
  document.getElementById("title").disabled = false;
  document.getElementById("author").disabled = false;
  document.getElementById("form").submit();
} 
