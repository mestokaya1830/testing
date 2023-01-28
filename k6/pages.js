import http from 'k6/http'
import {check, sleep} from 'k6'

export const options = {
  stages: [
    {duration: '30s', target: 50},
    {duration: '1m', target: 100},
    {duration: '20s', target: 0}
  ]
};
export default function() {
  const pages = [
    '/',
    '/campaign',
    '/event'
  ]
  for (const page of pages) {
    const res = http.get('https://kadindostu.gaziantep.bel.tr/acp/' + page)
    check(res, {
      'status was 200' : (r) => r.status === 200
    })
    sleep(1)
  }
}