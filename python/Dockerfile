FROM python:3.8-alpine
WORKDIR /app
RUN apk add --update \
  rust cargo build-base libffi-dev openssl-dev \
  xmlsec xmlsec-dev \
  && rm -rf /var/cache/apk/*

ADD requirements.txt /tmp
RUN pip install -r /tmp/requirements.txt

EXPOSE 8000
CMD python index.py 
