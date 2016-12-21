{{ csrf_field() }}
                  
                  <div class="form-group form-group-lg{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="control-label col-md-2" for="title">Title :</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Give meaningfull Title..." value="{{ old('title', isset($post->title) ? $post->title : null ) }}" maxlength="100" required>

                      @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>
                                <ul>
                                    @foreach ($errors->get('title') as $errorMsg)
                                        <li>{{ $errorMsg }}</li>    
                                    @endforeach
                                </ul>
                            </strong>
                        </span>
                      @endif
                    </div>
                  </div> <!-- End of .form-group for title -->

                  <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <label class="control-label col-md-2" for="body">Content :</label>
                    <div class="col-md-10">
                      <textarea class="form-control" id="body" name="body" rows="20" placeholder="Write whole post here..." required>{{ old('body', isset($post->body) ? $post->body : null ) }}</textarea>

                      @if ($errors->has('body'))
                        <span class="help-block">
                            <strong>
                                <ul>
                                    @foreach ($errors->get('body') as $errorMsg)
                                        <li>{{ $errorMsg }}</li>    
                                    @endforeach
                                </ul>
                            </strong>
                        </span>
                      @endif
                    </div>
                  </div> <!-- End of .form-group for body -->

                  <div class="form-group">
                    <div class="col-md-offset-2 col-md-4">
                      <button type="submit" class="btn btn-success btn-lg btn-block">{{ $submitButton }}</button>
                    </div>
                    <div class="col-md-offset-2 col-md-4">
                      <button type="reset" class="btn btn-default btn-lg btn-block">Reset</button>
                    </div>
                  </div>