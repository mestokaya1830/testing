const  mathObject = require('./test_functions/math')


//check sum
test('Check sum', () => {
  expect(mathObject.sum(5,10)).toBe(15)
})

//check sub
test('Check sub', () => {
  expect(mathObject.sub(15,10)).toBe(5)
})


//check division
test('Check division', () => {
  expect(mathObject.division(30,10)).toBe(3)
})

//check multiple
test('Check multiple', () => {
  expect(mathObject.multiple(5,10)).toBe(50)
})
