const questions = document.querySelector(".question");
const faqs = [
  {
    que: "How Long is the class?",
    ans: "It is 1 hour long",
  },
  {
    que: "Where will the class be held?",
    ans: "We usually do all our classes online via the zoom app.",
  },
  {
    que: "Will I be charged for the class?",
    ans: "No, the first hour is completely free! You'll only be charged after the first hour if you end up liking us!",
  },
  {
    que: "What will I need for the class?",
    ans: "You'll need a laptop or tablet, a stable internet and a place to write. That's all!",
  },
];

questions.innerHTML;
for (let item of faqs) {
  questions.innerHTML += `<div class="question-container"><p id="question"><strong>${item.que}</strong></p><p>${item.ans}</p></div>`;
}
