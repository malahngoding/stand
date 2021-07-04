import axios from 'axios';
import constants from './constants';

const axiosClient = axios.create();

axiosClient.defaults.baseURL = constants.HOST_URL;

axiosClient.defaults.headers = constants.headers;

// To share cookies to cross site domain, change to true.
axiosClient.defaults.withCredentials = false;

export async function getCustomRequest(URL) {
  const response = await axios.get(`/${URL}`);
  return response;
}

export async function getRequest(URL) {
  const response = await axiosClient.get(`/${URL}`);
  return response;
}

export async function postRequest(URL, payload) {
  const response = await axiosClient.post(`/${URL}`, payload);
  return response;
}

export async function patchRequest(URL, payload) {
  const response = await axiosClient.patch(`/${URL}`, payload);
  return response;
}

export async function deleteRequest(URL) {
  const response = await axiosClient.delete(`/${URL}`);
  return response;
}
