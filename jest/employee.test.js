const  employee = require('./test_functions/employee')

//check all
test('Check all value', () => {
  expect(employee).toEqual({name:'Mesto', salery:4000});
})