FROM node:8.5

RUN apt-get update \
  && npm install -g chalk \
  && npm install -g pm2 \
  && npm install -g webpack \
  && npm install -g babel \
  && npm install -g yarn

RUN mkdir /src
WORKDIR /src
RUN npm install

EXPOSE 3000