import http from 'k6/http';
import { check, sleep } from 'k6'

const url = 'http://localhost:8000/api/delete';

export const options = {
  vus: 100,
  duration: '5s',
}

export default function () {
  const params = { headers: { 'X-MyHeader': 'k6test' } };
  http.del(url, null, params);
  check(res, {'status vas 200: ': (r) => r.status == 200})
}
