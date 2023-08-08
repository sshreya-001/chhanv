// Validate donation amount
const amountInput = document.querySelector('input[name="amount"]');
amountInput.addEventListener('input', () => {
  if (amountInput.validity.rangeOverflow) {
    amountInput.setCustomValidity('Maximum donation amount is $10000');
  } else {
    amountInput.setCustomValidity('');
  }
});

// Format donation amount
amountInput.addEventListener('blur', () => {
  amountInput.value = parseFloat(amountInput.value).toFixed(2);
});
