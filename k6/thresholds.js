import http, { get } from "k6/http";
import { check, sleep } from "k6";

export const options = {
  vus: 400,
  duration: '5s',
  thresholds: {
    http_req_duration: ["p(90)<1000"],
  },
};
export default function () {
  let res = http.get("https://kadindostu.gaziantep.bel.tr/acp/campaign");
  //with assertion
  check(res, { "status vas 200: ": (r) => r.status == 200 });
  // sleep(1);
}
