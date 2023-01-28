import http from 'k6/http'
import {check, sleep} from 'k6'

export const options = {
  stages: [
    {duration: '30s', target:50},
    {duration: '1m30s', target:100},
    {duration: '20s', target:0}
  ]
}

export default function () {
  const res = http.get('https://konut.gaziantepbilisim.com.tr/')
  check(res, {'status vas 200: ': (r) => r.status == 200})
  sleep(1)
}