const totprice = document.getElementById('totprice');
const serviceprice = document.getElementById('serviceprice');
const deliveryprice = document.getElementById('deliveryprice');

// console.log(totprice);
// console.log(serviceprice.value);
// console.log(deliveryprice.value);

calTotal();

serviceprice.addEventListener('input', calTotal);
deliveryprice.addEventListener('change', calTotal);


function calTotal() {
  if(serviceprice.value == ''){
    totprice.innerText = "  N " + deliveryprice.value;
  }
  else{
    totprice.innerText = "  N " + (parseInt(serviceprice.value) + parseInt(deliveryprice.value));
  } 
}