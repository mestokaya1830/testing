import http from 'k6/http';
import { sleep, check } from 'k6';
import { Counter } from 'k6/metrics';

export const requests = new Counter('http_reqs');

export const options = {
  stages: [
    { target: 20, duration: '20s' },
    { target: 15, duration: '20s' },
    { target: 0, duration: '20s' },
  ],
  thresholds: {
    http_req_duration: ["p(95)<200"],
    requests: ['count < 100'],
  },
};
export default function () {
  const res = http.get('https://konut.gaziantepbilisim.com.tr');
  sleep(1);
  check(res, {'status is 200': (r) => r.status === 200,});
}
