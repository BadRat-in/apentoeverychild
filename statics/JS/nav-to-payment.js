let showpayment = async(homediv, payment, count, type) => {
  homediv.style = "animation: unload 300ms ease-out;";
  payment.style.display = "flex";
  // payment.style = "animation: loadup 300ms ease-out;";
  await sleep(290);
  homediv.style.display = "none";
  if (type === "c"){
    count.value = 1;
  }else if(type === "b"){
    count.value = 4;
  }else{
    count.value = 10;
  }

};

let showhome = async(homediv, payment) => {
  payment.style = "animation: unload 300ms ease-out;";
  homediv.style.display = "block";
  homediv.style = "animation: loadup 300ms ease-out;";
  await sleep(290);
  payment.style.display = "none";
};

