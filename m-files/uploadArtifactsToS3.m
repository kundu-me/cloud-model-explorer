function uploadArtifactsToS3(modelPath)
    system(['aws s3 cp ', modelPath, 's3://kundu-me-project/system composer_models/artifacts/ --recursive']);
end
