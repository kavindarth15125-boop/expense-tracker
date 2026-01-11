function addExpense(){
fetch("../backend/expenses/addExpense.php",{
method:"POST",
body:JSON.stringify({
title:title.value,
amount:amount.value,
category:category.value
})
});
loadExpenses();
}

function loadExpenses(){
fetch("../backend/expenses/getExpenses.php")
.then(res=>res.json())
.then(data=>{
 let list="";
 data.forEach(e=>{
  list+=`
   <div class="card">
    <h4>${e.title}</h4>
    <p>₹ ${e.amount}</p>
    <small>${e.category}</small>
   </div>
  `;
 });
 document.getElementById("expenseList").innerHTML=list;
});
}

loadExpenses();
