function fnc1(value)
{
  return value + ' / ' + fnc2(value);
}

function fnc2(value)
{
  return value.split('').reverse().join('');
}

module.exports = fnc1;
