const sum = require('./sum');
const fnc1 = require('./advanced');
const fetchData = require('./fetchData');

test('adds 1 + 2 to equal 3', () => {
  expect(sum(1, 2)).toBe(3);
});

test('reverse', () => {
  expect(fnc1('supertest')).toBe('supertest / tsetrepus');
});

test('data fetching', done => {
  function callback(data) {
    try {
      expect(JSON.stringify(data)).toBe(JSON.stringify({"data": {"value": "test"}}));
      done();
    } catch (error) {
      done(error);
    }
  }

  fetchData(callback);
});
