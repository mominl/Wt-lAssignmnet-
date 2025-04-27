function setTboxValue(value) {
    const tbox = document.getElementById('tbox');
    if (tbox.value === '0' && !['+', '-', '*', '/'].includes(value)) {
      tbox.value = value;
    } else {
      tbox.value += value;
    }
  }
  
  function calculate() {
    const tbox = document.getElementById('tbox');
    try {
      tbox.value = eval(tbox.value);
    } catch (e) {
      tbox.value = "Error";
    }
  }
  
  function clearTbox() {
    document.getElementById('tbox').value = '0';
  }
  
  function backspace() {
    const tbox = document.getElementById('tbox');
    tbox.value = tbox.value.slice(0, -1);
    if (tbox.value === '') tbox.value = '0';
  }
  