const  mixObject = require('./test_functions/mix')

//check name
test('Check name', () => {
  expect(mixObject.name(1)).not.toBeNull();
})

test('Check name value', () => {
  expect(mixObject.name('Mfesto')).toBe('Mesto');
})

test('Check alive', () => {
  expect(mixObject.alive(1)).toBeTruthy()
})
