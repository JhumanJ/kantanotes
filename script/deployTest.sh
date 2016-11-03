clear
echo "---SSH Connection---"
chmod 400 Kantakey.pem
ssh -i "Kantakey.pem" ubuntu@ec2-35-162-135-70.us-west-2.compute.amazonaws.com 'bash -s' < gitpull.sh
echo "---Connection Exit---"