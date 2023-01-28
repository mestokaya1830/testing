import http from 'k6/http';
import { sleep } from 'k6'

export const options = {
  vus: 100,
  duration: '5s',
}

export default function(){
  const url = 'http://localhost:8000/api/products/add'

  const payload = JSON.stringify({
    name:'Desktop',
    slug:'desktop',
    price:'99/99'
  })

  const params = {
    Headers: {
      'Content-Type':'application/json'
    }
  }

  http.post(url,payload, params)
  check(res, {'status vas 200: ': (r) => r.status == 200})
  sleep(1)
}
