import http from 'k6/http'
import { check, sleep } from 'k6'

export const options = {
  vus: 10000,
  duration: '120s',
}

export default function () {
  let res = http.get('https://kadindostu.gaziantep.bel.tr/acp/')
  // http.get('https://konut.gaziantepbilisim.com.tr/hakkimizda')
  // http.get('https://konut.gaziantepbilisim.com.tr/projeler')
  // https.get('https://konut.gaziantepbilisim.com.tr/iletisim')
  // https.get('https://konut.gaziantepbilisim.com.tr/basvuru')
  // http.get('https://konut.gaziantepbilisim.com.tr/proje/kuzeykent-projesi-2-etap')
  // http.get('https://konut.gaziantepbilisim.com.tr/basvuru?proje=kuzeykent-projesi-2-etap')
  // http.get('https://konut.gaziantepbilisim.com.tr/proje/guneykent-projesi-2-etap')
  // http.get('https://konut.gaziantepbilisim.com.tr/basvuru?proje=guneykent-projesi-2-etap')
  // https.get('https://konut.gaziantepbilisim.com.tr/admin/giris-yap')


  //with assertion
  check(res, {'status vas 200: ': (r) => r.status == 200})
  sleep(1)
}