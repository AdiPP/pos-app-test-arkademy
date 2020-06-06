const sortAndDivide = (number) => {
  // Memisah Nomor
  const dividedNumber = number.toString().split("0")
  for (let index = 0; index < dividedNumber.length; index++) {
    dividedNumber[index] = dividedNumber[index].split("").sort().join("")
  }
  // Mengurutkan Nomor
  const sortedNumber = parseInt(dividedNumber.join(""))
  return sortedNumber
}

console.log(sortAndDivide(5956560159466056))