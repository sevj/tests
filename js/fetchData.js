require('es6-promise').polyfill();
require('isomorphic-fetch');

const baseURL = 'http://localhost:7777';

function fetchData(callback)
{
    fetch(new URL('/data.json', baseURL))
      .then(function(response) {
        return response.json();
      })
      .then(function(json) {
        callback(json);
      })
}

module.exports = fetchData;
