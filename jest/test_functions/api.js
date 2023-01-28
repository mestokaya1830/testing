
  const { default: axios } = require("axios")
const fetchApi = {
    getUsers: axios.get('https://jsonplaceholder.typicode.com/users/1')
    .then(res => res.data)
    .catch(error => error)
  }
  module.exports = fetchApi
