let numDecomp = {
  hundreds: 0,
  tens: 0,
  units: 0,
  decomp: function(num){
    if (num < 100 || num > 999)
      return console.error("An incorrectly entered number")

    for (let prop in numDecomp){
      if (num) {
        numDecomp[prop] = num % 10
        num = Math.floor(num / 10)
      }
    }
  }
}

numDecomp.decomp(412);
console.log(numDecomp)
