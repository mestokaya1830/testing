const roles = ['User','Admin','Super Admin']//this can come from anywhere
test('Admin should be in roles', () => {
  expect(roles).toContain('Super Admin')
})