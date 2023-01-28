const Users = require('./test_functions/api')

test('Check api user...', () => {
  expect.assertions(1)
  return Users.getUsers.then(data => {
    expect(data.name).toEqual('Leanne Graham')
  })
})