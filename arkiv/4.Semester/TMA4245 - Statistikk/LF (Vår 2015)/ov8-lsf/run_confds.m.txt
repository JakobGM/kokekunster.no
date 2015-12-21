clc;close all; clear all;

% simuate the data
n = 1000; % length of the data set
% mean and standard deviation
mu = 1;
sigma = 2;
Z = zeros(n,1);
for i = 1:n
    Z(i) = mu + sigma*randn;
end

display = 1;
data = Z;
[mu_hat, sigma_hat, mu_interval] = confds(mu,sigma,data,display);

% show the result
disp('the results are: ')
mu_hat
sigma_hat
mu_interval